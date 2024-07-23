<template>
    <form class="searchbar row gap-3" id="formDemonSearch">
        <div class="searchbar-title">
            <h4>{{formTitle}}</h4>
        </div>
        <slot name="fields"></slot>

        <div class="col-md-12 form-actions">
            <slot name="formActions"></slot>
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
            'formActions',
            'formTitle'
        ],
    }
</script>
