import { ref } from 'vue'

export function personaDataComposable() {
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

    return {
        personaData
    }
}