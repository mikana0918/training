<template>
    <div></div>
</template>

<script>
export default {
    created() {
        this.index();
    },
    methods: {
        async index() {
            const res = await axios.get("/api/article");
            console.log(res);
        },
    },
};
</script>
