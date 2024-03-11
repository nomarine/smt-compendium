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
    <DemonTable/>
</template>

<script>
    import DemonTable from './DemonTable.vue';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            DemonTable
        }
    }
</script>
