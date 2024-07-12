<template>
    <form class="searchbar row">
        <div class="searchbar-title">
            <h4>Demon Search</h4>
        </div>
        <div class="search-fields">
            <div class="form-field">
                <label for="demon_name" class="form-label">Name</label>
                <input name="demon_name" type="text" class="form-control">
            </div>

            <div class="form-field">
                <label for="demon_race" class="form-label">Race</label>
                <select name="demon_race" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="form-field">
                <label for="demon_arcana" class="form-label">Arcana</label>
                <select name="demon_arcana" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="form-field">
                <label for="demon_origin" class="form-label">Origin</label>
                <select name="demon_origin" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="form-field">
                <label for="demon_appearance" class="form-label">Appears in</label>
                <select name="demon_appearance" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 form-actions">
            <button type="button" class="btn btn-secondary"><i class="fa-solid fa-eraser"></i>Clear</button>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
        </div>
    </form>
    <!-- <DemonTable/> -->
     <TableComponent
        :tableColumns="tableColumns"
        :personaData="personaData"
        :actions="actions">
     </TableComponent>
</template>

<script>
    import DemonTable from './DemonTable.vue';
    import TableComponent from './TableComponent.vue';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            DemonTable,
            TableComponent
        },
        data() {
            return {
                tableColumns: {
                    name: {title: 'Name', type: 'text'},
                    race: {title: 'Race', type: 'text'},
                    arcana: {title: 'Arcana', type: 'text'},
                    origin: {title: 'Origin', type: 'list'},
                    appearances: {title: 'Appearances', type: 'dict'},
                    actions: {title: 'Actions', type: 'text'},
                },
                personaData: {
                    seimen_kongou: 
                        { 
                            name: 'Seimen Kongou', 
                            race: 'N/A', 
                            arcana: 'Emperor', 
                            origin: ['Hinduism', 'Budhism'], 
                            appearances: {
                                p1: {
                                    abbreviation: 'P1',
                                    description: 'Megami Ibunroku Persona'
                                },
                                pasa: {
                                    abbreviation: 'P-ASA',
                                    description: 'Persona All Stars'
                                },
                            }
                    }
                },
                actions: {
                    show: {title: '', description: 'Learn more', icon: 'fa-solid fa-eye'}
                }
            }
        }
    }
</script>
