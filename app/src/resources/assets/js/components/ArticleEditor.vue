<template>
    <div>
        <div>
            <input type="text" v-model="article.subject" />
        </div>
        <div>
            <textarea v-model="article.body"></textarea>
        </div>
        <div>
            <button v-on:click="postArticle">Post</button>
        </div>
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