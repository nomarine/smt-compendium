<template>
    <FormComponent
        :formSelectList="formSelectList"
        :formActions="formActions"
        formTitle="Demon Search">
        <template v-slot:fields>
            <div class="search-fields">
                <div class="form-field">
                    <label for="demon_name" class="form-label">Name</label>
                    <input name="demon_name" type="text" class="form-control">
                </div>
                
                <template v-for="field, fieldKey in formSelectList" :key="fieldKey">
                    <div class="form-field">
                        <label :for="'demon_'+fieldKey" class="form-label">{{fieldKey}}</label>
                        <select :name="'demon_'+fieldKey" class="form-select" aria-label="Race select field">
                            <option selected></option>
                            <option v-for="option, optionKey in field" :value="option.id" :key="optionKey">{{option.title}}</option>
                        </select>
                    </div>
                </template>
            </div>
        </template>
    </FormComponent>

    <TableComponent
        :tableColumns="tableColumns"
        :payload="personaData"
        :actions="actions">
    </TableComponent>
    
    <Pagination-component>
    <li v-for="page, key in pagination" :key="key" :class="page.active ? 'page-item active' : 'page-item'">
        <a class="page-link" href="#" v-html="page.label"></a>
    </li>
    </Pagination-component>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                formSelectList: {
                    race: {
                        night: {id:'10', title:'Night'},
                        fairy: {id:'08', title:'Fairy'},
                        fiend: {id:'66', title:'Fiend'},
                        vile: {id:'24', title:'Vile'},
                    },
                    arcana: {
                        fool: {id:'00', title:'Fool'},
                        jester: {id:'00-1', title:'Jester'},
                        hope: {id:'00-7', title:'Hope'},
                    },
                    origin: {
                        budhism: {id:'03', title:'Budhism'},
                        hinduism: {id:'02', title:'Hinduism'},
                        japanese: {id:'01', title:'Japanese'},
                    },
                    appears_in: {
                        p1: {id:'p1', title:'Megami Ibunroku Persona'},
                        smt3: {id:'smt3', title:'Shin Megami Tensei 3: Nocturne'},
                        desu1: {id:'desu1', title:'Devil Survivor'},
                    }
                },
                formActions: {
                    submit: {title:'Search', icon: 'fa-solid fa-magnifying-glass'},
                    etc: {
                        clear: {title:'Clear', icon: 'fa-solid fa-eraser'},
                        // random: {title:'Random', icon: 'fa-solid fa-dice'},
                    },

                },
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
                                    description: 'Persona All-Stars Arena'
                                },
                            }
                    }
                },
                actions: {
                    show: {title: '', description: 'Learn more', icon: 'fa-solid fa-eye'},
                    // edit: {title: '', description: 'Edit info', icon: 'fa-solid fa-pencil'},
                },
                pagination: {
                    1: {
                        label: '1',
                        active: true
                    },
                    2: {
                        label: '2',
                        active: false
                    },
                    3: {
                        label: '3',
                        active: false
                    },
                }
            }
        }
    }
</script>
