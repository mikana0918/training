<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>vueを使ってaxiosを学ぶ</title>
</head>

<body>
<div id="app">
    <ul>
        <li v-for="user in users">
            {{ user[0].id }}</li>

    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    new Vue({
        el: '#app',
        data: {
            // 以下のresponse.dataを格納する
            users:null
        },
        async mounted() {
            try {
                const response = await axios.get(
                    'http://127.0.0.1:8000/api/article'
                );
                this.users = response.data;
            } catch (error) {
                console.log(error);
            }
        },
    });
</script>
</body>
</html>
