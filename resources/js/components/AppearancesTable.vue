<template>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Games<i class="fa-solid fa-sort"></i></th>
            <th scope="col">Race/Arcana<i class="fa-solid fa-sort"></i></th>
            <th scope="col">Base Level<i class="fa-solid fa-sort"></i></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Megami Ibunroku Persona</th>
            <td>Emperor</td>
            <td>1</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    import { Tooltip } from 'bootstrap'

    export default {
        mounted() {
            new Tooltip(document.body, {
                selector: "[data-bs-toggle='tooltip']",
            })
            console.log('Component mounted.')
        }
    }
</script>
