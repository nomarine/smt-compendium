<template>
    <form class="searchbar row gap-3">
        <div class="searchbar-title">
            <h4>Demon Search</h4>
        </div>
        <slot name="fields"></slot>

        <div class="col-md-12 form-actions">
            <template v-for="action, actionKey in formActions.etc" :key="actionKey">
                <button type="button" class="btn btn-secondary"><i :class="action.icon"></i>{{action.title}}</button>
            </template>
            <button type="submit" class="btn btn-primary"><i :class="formActions.submit.icon"></i>{{formActions.submit.title}}</button>
        </div>
    </form>
</template>

<script>
    export default {
        mounted() {
        
        },
        props: [
            'formSelectList',
            'formActions'
        ],
    }
</script>
