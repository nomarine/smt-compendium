<template>
    <h3 class="demon-title">{{selectedDemon.name}}</h3>
    <hr>
    <div class=row>
        <div class="col-md-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li v-for="(game, gameKey,index) in selectedDemon.appearances" :key="gameKey" class="nav-item" role="presentation">
                <button class="nav-link" :class="{active: index === 0}" :id="game.title.abbreviation+'-tab'" data-bs-toggle="tab" :data-bs-target="'#'+game.title.abbreviation" type="button" role="tab" :aria-controls="game.title.abbreviation" :aria-selected="index === 0">{{game.title.abbreviation}}</button>
            </li>
        </ul>
            <div class="tab-content" id="myTabContent">
                <div v-for="(game, gameKey, index) in selectedDemon.appearances" :key="gameKey" class="tab-pane fade" :class="{'show active': index === 0}" :id="game.title.abbreviation" role="tabpanel" :aria-labelledby="game.title.abbreviation+'-tab'">
                    <img class="demon-portrait" :src="'/img/seimen_kongou_'+gameKey+'.png'" alt="Seimen Kongou portrait">
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div>
                <h5>Origin</h5>
                <p>
                    <span v-for="(origin, originKey) in selectedDemon.origin" :key="originKey">{{origin}}<span v-if="originKey != (selectedDemon.origin.length - 1)">, </span>
                    </span>
                </p>
            </div>
            <div>
                <h5>Original Lore</h5>
                <p name="demon_original_lore">Seimen Kongou, also known as Shoumen Kongou (青面金剛) is a Rakshasa of Hindu lore and a protector deity in Japanese Buddhist lore. The first record of Seimen Kongou comes from the Darani Jikkyou, a 7th-century text. He originally caused disease and suffering, but he rededicated himself to protect from the ills he once caused. He often appears as a blue deity with four arms who carries a three-pronged vajra, a staff, a wheel, and a coiled rope. The four objects represent various things: the Vajra represents the indestructible power of Buddhism; the staff is a ceremonial tool; the wheel represents Buddha's teachings; and the rope is a hunting weapon that symbolizes power over evil.
<br>Seimen Kongou began to mix with Taoism during the Kamakura period, which caused him to become a deity of the cult of Koushin. The Koushin believed that on the eve of the new year, before leading to the year of the monkey, it was very easy to have your life cut short. To prevent this, they would gather scrolls of Seimen Kongou or Sarutahiko to hold a celebration. They remained awake all night in front of statues of the three monkeys; See no evil, Speak no evil, hear no evil.</p>
            </div>
            <div>
                <h5>Appearances</h5>
                <!-- <AppearancesTable/> -->
                <TableComponent
                    :tableColumns="tableColumns"
                    :payload="selectedDemon.appearances">
                </TableComponent>
            </div>
        </div>
    </div>
    <br>
    <div>
        <a type="button" href="index" class="btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i>Back to Search</a>
    </div>
</template>

<script>
    import AppearancesTable from './AppearancesTable.vue';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:  {
            AppearancesTable
        },
        computed: {
            selectedDemon() {
                return this.$store.state.selectedItem
            }
        },
        data() { 
            return {
                tableColumns: {
                    games: {title: 'Games', type: 'text', sort: true},    
                    race_arcana: {title: 'Race/Arcana', type: 'dict', sort: false},
                    base_level: {title: 'Base Level', type: 'text', sort: false},
                },
                payload: {
                    selectedDemon: this.selectedDemon
                }
            }
        }
    }
</script>
