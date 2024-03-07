<template>
    <div class="searchbar">
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
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
