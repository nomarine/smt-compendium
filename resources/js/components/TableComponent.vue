<template>
    <table class="table">
        <thead>
            <tr>
            <th scope="col" v-for="column, key in tableColumns" :key="key">{{column.title}}<i class="fa-solid fa-sort"></i></th>
            <!-- <th scope="col">Name<i class="fa-solid fa-sort"></i></th>
            <th scope="col">Race<i class="fa-solid fa-sort"></i></th>
            <th scope="col">Arcana<i class="fa-solid fa-sort"></i></th>
            <th scope="col">Origin</th>
            <th scope="col">Appearances</th>
            <th scope="col">Actions</th> -->
            </tr>
        </thead>
        <tbody>
            <tr v-for="persona, personaKey in personaData" :key="personaKey">
                <td v-for="column, columnKey in tableColumns" :key="columnKey" scope="row">
                    <span v-if="column.type === 'list'">
                        <template v-for="value, key in persona[columnKey]" :key="key">
                            <span>{{value}}</span>
                        <span v-if="key != persona[columnKey].length - 1">, </span>
                        </template>
                    </span>
                    <span v-else-if="column.type === 'dict'">
                        <template v-for="game, gameKey, index in persona.appearances" :key="gameKey">
                        <a data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" :data-bs-title="game.description">
                            <span>{{game.abbreviation}}</span>
                        </a>
                        <span v-if="index != Object.keys(persona.appearances).length - 1">, </span>
                        </template>
                    </span>
                    <span v-else-if="columnKey === 'actions'">
                        <td><a href="show" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" data-bs-title="Learn more"><i class="fa-solid fa-eye"></i></a></td>
                    </span>
                    <span v-else>
                        {{persona[columnKey]}}
                    </span>
                </td>
            <!-- <td>{{persona.name}}</td>
            <td>{{persona.race}}</td>
            <td>{{persona.arcana}}</td>
            <td>{{persona.origin}}</td>
            <td><a data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" data-bs-title={{persona.appearances}}><span>P1</span></a></td> -->
                
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
            'personaData',
            'actions'
        ],
    }
</script>./TableComponent.vue
