<template>
    <div class="pt-3"> 
        <div class="text-right">
            <b-button :to="'/editor/' + $route.params.id">Edit</b-button>
            <b-button v-on:click="showModal=true" variant="danger">Remove</b-button>
        </div>
        <div>
            <h2>{{ article.subject }}</h2>
        </div>
        <div>
            <p>{{ article.body }}</p>
        </div>

        <!-- modal -->
        <transition v-if="showModal">
            <div class="modal-mask">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <div class="modal-header">
                            <p>Are you sure you want to delete?</p>
                        </div>
                        <div class="modal-footer">
                            <b-button v-on:click="removeArticle" variant="danger">Remove</b-button>
                            <b-button v-on:click="showModal=false">Cancel</b-button>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
        <!-- /modal -->
    </div>
</template>

<style>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>

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
            },
            showModal: false
        }
    },
    methods: {
        fetchArticle(id) {
            axios.get('api/article/detail/' + id)
                .then(res => this.article = res.data)
        },
        removeArticle() {
            axios.delete('api/article/remove/' + this.article.id)
                .then(res => this.$router.push('/list'))
        }
    }
}
</script>