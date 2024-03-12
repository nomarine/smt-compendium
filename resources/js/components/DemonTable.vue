<template>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Name<i class="fa-solid fa-sort"></i></th>
            <th scope="col">Race<i class="fa-solid fa-sort"></i></th>
            <th scope="col">Arcana<i class="fa-solid fa-sort"></i></th>
            <th scope="col">Origin</th>
            <th scope="col">Appearances</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Seimen Kongou</th>
            <td>N/A</td>
            <td>Emperor</td>
            <td>Hindu, Buddhist</td>
            <td><a data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" data-bs-title="Megami Ibunroku Persona"><span>P1</span></a></td>
            <td><a href="show" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" data-bs-title="Learn more"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    import { Tooltip } from 'bootstrap'

    export default {
        name: 'DemonTable',
        mounted() {
            new Tooltip(document.body, {
                selector: "[data-bs-toggle='tooltip']",
            })
            console.log('Component mounted.')
        }
    }
</script>
