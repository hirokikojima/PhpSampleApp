import ArticleDetail from './components/ArticleDetail.vue'
import ArticleEditor from './components/ArticleEditor.vue'
import ArticleList from './components/ArticleList.vue'

export default [
    {
        name: 'detail',
        path: '/detail',
        component: ArticleDetail
    },
    {
        name: 'editor',
        path: '/editor',
        component: ArticleEditor
    },
    {
        name: 'list',
        path: '/list',
        component: ArticleList
    },
    {
        name: 'notfound',
        path: '*',
        component: ArticleList
    }
]