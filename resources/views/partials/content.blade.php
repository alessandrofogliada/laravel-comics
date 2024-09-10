        <!-- contenitore comics  -->
        <div class="cardcontainer">
            <div class="centracontent">
                <AppCard v-for="(comic, i) in comics" :key="i" :infoCard="comic"/>
            </div>
        </div>
