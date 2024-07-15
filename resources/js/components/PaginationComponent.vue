<template>
    <!-- <nav> -->
    <div class="row">
        <div name="display-quantity" class="col-1 d-flex gap-2 align-items-center border-end">
            <p class="mb-0">Display</p>
            <select name="display" class="select select-pagination">
                <option value="5">5</option>
                <option value="10" selected>10</option>
                <option value="50">50</option>
            </select>
        </div>
        <div name="item-quantity" class="col-9 d-flex">
            <div>
                <p class="mb-0">1-1 de 1 items</p>
            </div>
        </div>
        <div name="page" class="col-2 d-flex justify-content-between">
            <div class="d-flex border-end flex-grow-1">
                <p class="mb-0">Page</p>
                <select name="pagination" class="select select-pagination">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="flex-grow-1">
                <a><i class="fa-solid fa-caret-left"></i></a>
                <a><i class="fa-solid fa-caret-right"></i></a>
            </div>
        </div>
    </div>
    <!-- </nav> -->
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
