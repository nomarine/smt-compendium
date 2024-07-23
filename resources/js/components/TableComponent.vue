<template>
    <table class="table" data-toggle="table">
        <thead>
            <tr>
            <th data-sortable="true" scope="col" v-for="column, key in tableColumns" :key="key" :data-field="key">{{column.title}}
                <a @click="sortColumnDefault(key)"><i class="fa-solid fa-sort"></i></a>
            </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="data, dKey in localPayload" :key="dKey" class="table-row">
                <td v-for="column, columnKey in tableColumns" :key="columnKey" scope="row" class="align-middle">
                    <span v-if="column.type === 'list'">
                        <template v-for="item, key in data[columnKey]" :key="key">
                            <span>{{item}}</span>
                        <span v-if="key != data[columnKey].length - 1">, </span>
                        </template>
                    </span>
                    <span v-else-if="column.type === 'dict'">
                        <template v-for="item, iKey, index in data[columnKey]" :key="iKey">
                        <a data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" :data-bs-title="item.description">
                            <span>{{item.abbreviation}}</span>
                        </a>
                        <span v-if="index != Object.keys(data[columnKey]).length - 1">, </span>
                        </template>
                    </span>
                    <span v-else-if="columnKey === 'actions'">
                        <template v-for="action, aKey in actions" :key="aKey">
                            <a :href="aKey" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" :data-bs-title="action.description">
                                <i :class="action.icon"></i>
                            </a>
                        </template>
                    </span>
                    <span v-else>
                        {{data[columnKey]}}
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    import { Tooltip } from 'bootstrap'

    export default {
        name: 'TableComponent',
        mounted() {
            new Tooltip(document.body, {
                selector: "[data-bs-toggle='tooltip']",
            })
        },
        props: [
            'tableColumns',
            'payload',
            'actions'
        ],
        data() { 
            return {
                localPayload: { ...this.payload}
            }
        },
        methods: {
            sortColumnDefault(column){
                const entries = Object.entries(this.localPayload);
                console.log(column)
                // Sort the array by the `name` property
                entries.sort((a, b) => {
                    const nameA = a[1][column].toUpperCase(); // Ignore case
                    const nameB = b[1][column].toUpperCase(); // Ignore case
                    if (nameA < nameB) return -1;
                    if (nameA > nameB) return 1;
                    return 0;
                });

                // Convert the sorted array back to an object
                this.localPayload = Object.fromEntries(entries);

                console.log(this.localPayload);
            }
        }
    }
</script>
