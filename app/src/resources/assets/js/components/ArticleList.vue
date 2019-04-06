<template>
    <div class="pt-3">
        <h2>Article List</h2>
        <b-list-group>
            <b-list-group-item v-for="(article, index) in articles" :key="index" :to="'/detail/' + article.id">
                {{ article.subject }}
            </b-list-group-item>
        </b-list-group>
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