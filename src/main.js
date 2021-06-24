const app = new Vue({
    el: "#root",
    data: {
        discList: null,
    },

    methods: {

    },

    mounted() {
        const url = "./dist/api/discs_api.php";
        axios
            .get(url)
            .then(info => {
                console.log(info);
                this.discList = info.data;
            })
            .catch(error => {
                console.log(error);
            })
    }
});