<template>
    <table class="table">
        <thead>
            <tr>
            <th scope="col" v-for="column, key in tableColumns" :key="key">{{column.title}}<i class="fa-solid fa-sort"></i></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="data, dKey in payload" :key="dKey" class="row-persona-table">
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
                        <td class="d-flex gap-3 justify-content-start">
                            <template v-for="action, aKey in actions" :key="aKey">
                                <a :href="aKey" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" :data-bs-title="action.description">
                                    <i :class="action.icon"></i>
                                </a>
                            </template>
                        </td>
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
    }
</script>
