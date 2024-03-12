<template>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Games</th>
            <th scope="col">Race/Arcana</th>
            <th scope="col">Base Level</th>
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
        name: 'DemonTable',
        mounted() {
            new Tooltip(document.body, {
                selector: "[data-bs-toggle='tooltip']",
            })
            console.log('Component mounted.')
        },
         data() {
      return {
        // Note 'isActive' is left out and will not appear in the rendered table
        fields: [
          {
            key: 'last_name',
            sortable: true
          },
          {
            key: 'first_name',
            sortable: false
          },
          {
            key: 'age',
            label: 'Person age',
            sortable: true,
            // Variant applies to the whole column, including the header and footer
            variant: 'danger'
          }
        ],
        items: [
          { isActive: true, age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
          { isActive: false, age: 21, first_name: 'Larsen', last_name: 'Shaw' },
          { isActive: false, age: 89, first_name: 'Geneva', last_name: 'Wilson' },
          { isActive: true, age: 38, first_name: 'Jami', last_name: 'Carney' }
        ]
      }
    }
    }
</script>
