<script setup>
    import { ref, onMounted } from 'vue'
    import { Tooltip } from 'bootstrap'
    
    onMounted(() => {
        new Tooltip(document.body, {
            selector: "[data-bs-toggle='tooltip']",
        })
    })

    const props = defineProps([
        'tableColumns',
        'payload',
        'actions'
    ])

    const emit = defineEmits([
        'action-triggered'
    ])

    const handleAction = (data) => {
        emit('action-triggered', data)
    }

    const localPayload = ref({ ...props.payload})
    const localTableColumns = ref({ ...props.tableColumns})

    function fieldList() {
        return fieldList.value = []
    }

    const initFieldList = () => {
        fieldList.value = []
    }

    const distinctFieldList = (item) => {
        if(fieldList.value.includes(item)){
            console.log(false)
            return false
        } else {
            fieldList.value.push(item)
            console.log(true, item)
            return true
        }
    }
        
    const sortColumn = (column, order = null) => {
        const entries = Object.entries(localPayload.value);

        if(order === 0) {
            entries.sort((a, b) => {
                const nameA = a[1][column].toUpperCase(); // Ignore case
                const nameB = b[1][column].toUpperCase(); // Ignore case
                if (nameA < nameB) return 1;
                if (nameA > nameB) return -1;
                return 0;
            });
            // Convert the sorted array back to an object
            localPayload.value = Object.fromEntries(entries);
            localTableColumns.value[column].sort = 'desc'
        } else if(order === 1) {          
            entries.sort((a, b) => {
                const nameA = a[1][column].toUpperCase(); // Ignore case
                const nameB = b[1][column].toUpperCase(); // Ignore case
                if (nameA < nameB) return -1;
                if (nameA > nameB) return 1;
                return 0;
            });
            // Convert the sorted array back to an object
            localPayload.value = Object.fromEntries(entries);
            localTableColumns.value[column].sort = 'asc'  
        } else {
            localPayload.value = { ...props.payload}
            localTableColumns.value[column].sort = true
        }
    }
</script>

<template>
    <table class="table" data-toggle="table">
        <thead>
            <tr>
            <th data-sortable="true" scope="col" v-for="column, key in tableColumns" :key="key" :data-field="key">{{column.title}}
                <span v-if="column.sort">
                    <a v-if="column.sort === 'asc'" @click="sortColumn(key, 0)"><i class="fa-solid fa-sort-up"></i></a>
                    <a v-else-if="column.sort === 'desc'" @click="sortColumn(key)"><i class="fa-solid fa-sort-down"></i></a>
                    <a v-else @click="sortColumn(key, 1)"><i class="fa-solid fa-sort"></i></a>
                </span>
            </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="data, dKey in localPayload" :key="dKey" class="table-row">
                <td v-for="column, columnKey in tableColumns" :key="columnKey" scope="row" class="align-middle">
                    {{ initFieldList() }}
                    <template v-if="column.game_distinct">
                        <template v-for="game, gameKey in data.appearances" :key="gameKey">
                            <span v-if="column.type === 'list'">
                                <template v-for="item, key in game[columnKey]" :key="key">
                                    <span>{{item}}</span>
                                <span v-if="key != game[columnKey].length - 1">, </span>
                                </template>
                            </span>
                            <span v-else-if="column.type === 'dict'">
                                <template v-for="item, iKey, index in game[columnKey]" :key="iKey">
                                <a data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" :data-bs-title="item.description">
                                    <span>{{item.abbreviation}}</span>
                                </a>
                                <span v-if="index != Object.keys(game[columnKey]).length - 1">, </span>
                                </template>
                            </span>
                            <span v-else>
                                <template v-if="distinctFieldList(game[columnKey])">
                                    {{game[columnKey]}}
                                </template>
                            </span>
                        </template>
                    </template>
                    
                    <template v-else>
                        <span v-if="column.type === 'list'">
                            <template v-for="item, key in data[columnKey]" :key="key">
                                <span>{{item}}</span>
                            <span v-if="key != data[columnKey].length - 1">, </span>
                            </template>
                        </span>
                        <span v-else-if="column.type === 'dict'">
                            <template v-for="item, iKey, index in data[columnKey]" :key="iKey">
                            <a data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" :data-bs-title="item.title.description">
                                <span>{{item.title.abbreviation}}</span>
                            </a>
                            <span v-if="index != Object.keys(data[columnKey]).length - 1">, </span>
                            </template>
                        </span>
                        <span v-else-if="columnKey === 'actions'">
                            <template v-for="action, aKey in actions" :key="aKey">
                                <a v-if="aKey === 'show'" href="#" @click="handleAction(data)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" :data-bs-title="action.description">
                                    <i :class="action.icon"></i>
                                </a>
                                <a v-else :href="aKey" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" :data-bs-title="action.description">
                                    <i :class="action.icon"></i>
                                </a>
                            </template>
                        </span>
                        <span v-else>
                            {{data[columnKey]}}
                        </span>
                    </template>
                </td>
            </tr>
        </tbody>
    </table>
</template>
