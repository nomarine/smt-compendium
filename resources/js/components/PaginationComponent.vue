<template>
    <!-- <nav> -->
    <div class="pagination-controller d-flex justify-content-between align-items-center">
        <div name="display-quantity" class="d-flex gap-2 align-items-center border-end pe-2">
            <p class="mb-0">Display</p>
            <select name="display" class="select select-pagination">
                <option value="5">5</option>
                <option value="10" selected>10</option>
                <option value="50">50</option>
            </select>
        </div>
        <div name="item-quantity" class="d-flex flex-grow-1 align-items-center justify-content-start ms-2">
            <p class="mb-0">1-1 de 1 items</p>
        </div>
        <div name="page" class="d-flex align-items-center gap-3">
            <div class="d-flex border-end gap-2 align-items-center pe-2">
                <p class="mb-0">Page</p>
                <select name="pagination" class="select select-pagination">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-2">
                <a class="flex-fill"><i class="fa-solid fa-angle-left"></i></a>
                <a class="flex-fill"><i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</template>

<script>
    
    export default {
        mounted() {
            
        },
        props: [

        ],
        components: {
            
        },
        data () {

        },
        methods: {
            
        }
    }
</script>
