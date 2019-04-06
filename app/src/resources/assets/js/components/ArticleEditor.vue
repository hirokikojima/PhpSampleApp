<template>
    <div class="pt-3">
        <b-row>
            <b-col sm="2">
                <label for="subject">Subject:</label>
            </b-col>
            <b-col sm="10">
                <b-form-input id="subject" type="text" v-model="article.subject" />
            </b-col>
        </b-row>
        <b-row class="mt-2">
            <b-col sm="2">
                <label for="body">Body:</label>
            </b-col>
            <b-col sm="10">
                <b-form-textarea id="body" v-model="article.body" rows="3" max-rows="6"></b-form-textarea>
            </b-col>
        </b-row>
        <b-row class="mt-2">
            <b-col sm="2">
            </b-col>
            <b-col sm="10">
                <b-button v-on:click="postArticle" variant="success">Post</b-button>
            </b-col>
        </b-row>
    </div>
</template>

<script>
export default {
    created() {
        this.fetchArticle(this.$route.params.id)
    },
    data() {
        return {
            article: {
                id: "",
                subject: "",
                body: ""
            }
        }
    },
    methods: {
        fetchArticle(id) {
            if (id) {
                axios.get('api/article/detail/' + id)
                    .then(res => this.article = res.data)
            }
        },
        postArticle() {
            if (!this.article.id) {
                // 記事追加の場合
                axios.post('api/article/add', {
                    subject: this.article.subject,
                    body: this.article.body
                })
                .then(res => this.$router.push('/list'))
            } else {
                // 記事更新の場合
                axios.put('api/article/update/' + this.article.id, {
                    subject: this.article.subject,
                    body: this.article.body
                })
                .then(res => this.$router.push('/list'))
            }
        }
    }
}
</script>