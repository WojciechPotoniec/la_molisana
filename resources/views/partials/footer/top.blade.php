<div class="container">
    <ul>
        <li v-for="(Card, index) in listCards" :key="index">
            <img :src="Card . img" :alt="Card . title" />
            <a href="#"></a>
        </li>
    </ul>
</div>