<template>
    <h3 class="demon-title">Seimen Kongou</h3>
    <hr>
    <div class=row>
        <div class="col">
            <img>
        </div>

        <div class="col">
            <div>
                <label for="demon_origin">Origin</label>
                <p name="demon_origin">Hindu, Buddhist</p>
            </div>
            <div>
                <label for="demon_original_lore">Original Lore</label>
                <p name="demon_original_lore">Seimen Kongou, also known as Shoumen Kongou (青面金剛) is a Rakshasa of Hindu lore and a protector deity in Japanese Buddhist lore. The first record of Seimen Kongou comes from the Darani Jikkyou, a 7th-century text. He originally caused disease and suffering, but he rededicated himself to protect from the ills he once caused. He often appears as a blue deity with four arms who carries a three-pronged vajra, a staff, a wheel, and a coiled rope. The four objects represent various things: the Vajra represents the indestructible power of Buddhism; the staff is a ceremonial tool; the wheel represents Buddha's teachings; and the rope is a hunting weapon that symbolizes power over evil.
<br>Seimen Kongou began to mix with Taoism during the Kamakura period, which caused him to become a deity of the cult of Koushin. The Koushin believed that on the eve of the new year, before leading to the year of the monkey, it was very easy to have your life cut short. To prevent this, they would gather scrolls of Seimen Kongou or Sarutahiko to hold a celebration. They remained awake all night in front of statues of the three monkeys; See no evil, Speak no evil, hear no evil.</p>
            </div>
            <div>
                <label for="demon_origin">Appearances</label>
                <AppearancesTable/>
            </div>
        </div>
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
        }
    }
</script>
