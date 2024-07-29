<script setup>
    import { ref } from 'vue'
    import { useStore } from 'vuex'

    const store = useStore()

    const formData = ref({
        name: '',
        race: '',
        arcana: '',
        origin: '',
        appears_in: '',
    })

    const formSelectList = ref({
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
    })

    const formActions = ref({
        submit: {title:'Search', icon: 'fa-solid fa-magnifying-glass'},
        etc: {
            clear: {title:'Clear', icon: 'fa-solid fa-eraser'},
            // random: {title:'Random', icon: 'fa-solid fa-dice'},
        }
    })

    const tableColumns = ref({
        name: {title: 'Name', type: 'text', sort: true, game_distinct: false},
        race: {title: 'Race', type: 'text', sort: false, game_distinct: true},
        arcana: {title: 'Arcana', type: 'text', sort: false, game_distinct: true},
        origin: {title: 'Origin', type: 'list', sort: false, game_distinct: false},
        appearances: {title: 'Appearances', type: 'dict', sort: false},
        actions: {title: 'Actions', type: 'text', sort: false},
    })

    const personaData = ref({
        seimen_kongou: {
                name: 'Seimen Kongou', 
                origin: ['Hinduism', 'Budhism'], 
                appearances: {
                    p1: {        
                        title: { abbreviation: 'P1',
                                    description: 'Megami Ibunroku Persona',
                        },
                        base_level: '1',
                        arcana: 'Emperor', 
                        portrait: 'seimen_kongou_p1.png'
                    },
                    pasa: {
                        name: 'Seimen Kongou',
                        title: { abbreviation: 'PASA',
                                    description: 'Persona All-Stars Arena',
                        },
                        base_level: '16',
                        arcana: 'Emperor', 
                        portrait: 'seimen_kongou_pasa.png'
                    },
                }
        },
        himeros: { 
                name: 'Himeros', 
                origin: ['Greco-Roman'], 
                appearances: {
                    smt6: {
                        title: {
                            abbreviation: 'SMT6',
                            description: 'Shin Megami Tensei VI',
                        },
                        base_level: '77',
                        race: 'Zealot', 
                        portrait: 'himeros_smt6.jpg'
                    },
                    p6: {
                        title: {
                            abbreviation: 'P6',
                            description: 'Persona 6',
                        },
                        base_level: '80',
                        arcana: 'Lovers', 
                    },
                }
        },
        janus: { 
                name: 'Janus', 
                origin: ['Greco-Roman'], 
                appearances: {
                    smt2: {
                        title: {
                            abbreviation: 'SMT2',
                            description: 'Shin Megami Tensei II',
                        },
                        base_level: '24',
                        race: 'Yoma', 
                    },
                    p1: {
                        title: {
                            abbreviation: 'P1',
                            description: 'Megami Ibunroku Persona',
                        },
                        base_level: '30',
                        arcana: 'Star', 
                    },
                }
        }
    })

    const actions = ref({
        show: {title: '', description: 'Learn more', icon: 'fa-solid fa-eye'},
        // edit: {title: '', description: 'Edit info', icon: 'fa-solid fa-pencil'},
    })

    const pagination = ref({
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
    })

// functions that mutate state and trigger updates
    const formatFormLabel = (string) => {
        string = string.replace(/_/g, " ")
        string = string.charAt(0).toUpperCase() + string.slice(1)
        return string
    }

    const clearForm = () => {
        formData.value = {
            name: '',
            race: '',
            arcana: '',
            origin: '',
            appears_in: '',
        }
    }
    const showDemon = (demon) => {
        store.commit('setSelectedItem', demon);
        window.location.href = `demon/show`;
    }

</script>

<template>
    <FormComponent
        :formSelectList="formSelectList"
        :formActions="formActions"
        formTitle="Demon Search">
        <template v-slot:fields>
            <div class="search-fields">
                <div class="form-field">
                    <label for="demon_name" class="form-label">Name</label>
                    <input name="demon_name" type="text" class="form-control" v-model="formData.name">
                </div>
                
                <template v-for="field, fieldKey in formSelectList" :key="fieldKey">
                    <div class="form-field">
                        <label :for="'demon_'+fieldKey" class="form-label">{{formatFormLabel(fieldKey)}}</label>
                        <select :name="'demon_'+fieldKey" class="form-select" :aria-label="fieldKey+' select field'" data-actions-box="true" v-model="formData[fieldKey]">
                            <option selected></option>
                            <option v-for="option, optionKey in field" :value="option.id" :key="optionKey">{{option.title}}</option>
                        </select>
                    </div>
                </template>
            </div>
        </template>
        <template v-slot:formActions>
            <button type="button" class="btn btn-secondary" @click="clearForm"><i class="fa-solid fa-eraser"></i>Clear</button>
        </template>
    </FormComponent>

    <TableComponent
        :tableColumns="tableColumns"
        :payload="personaData"
        :actions="actions"
        @action-triggered="showDemon">
    </TableComponent>
    
    <Pagination-component>

    </Pagination-component>

</template>
