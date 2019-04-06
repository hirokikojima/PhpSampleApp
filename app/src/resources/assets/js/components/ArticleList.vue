<template>
    <div>
        <ul>
            <li v-for="(article, index) in articles" :key="index">
                <router-link :to="'/detail/' + article.id">
                    {{ article.subject }}
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    created() {
        this.fetchArticles() 
    },
    data() {
        return {
            articles: []
        }
    }, 
    methods: {
        fetchArticles() {
            axios.get('api/article/list')
                .then(res => this.articles = res.data)
        }
    }
}
</script>