<template>
    <div class="component">
        <div class="title clearfix">
            <h2 class="float-left">Article List</h2>
            <div class="float-right">
                <b-button :to="'/editor/'" variant="success">New</b-button>
            </div>
        </div>
        <div class="content">
            <b-list-group>
                <b-list-group-item v-for="(article, index) in articles" :key="index" :to="'/detail/' + article.id">
                    {{ article.subject }}
                </b-list-group-item>
            </b-list-group>
        </div>
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