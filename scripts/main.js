const app = new Vue ({
    el: "#app",
    data: {
        discsList: {},
    },
    methods: {
        // creo un metodo che mi scarica da online dei dati
        // qui faro' la chimata axios, per poterla rifare quando mi serve
        // florian usa una funzione che chiama fetchData()
        obtainData() {
            axios.get("myServer.php")
                .then(resp => {
                    // salvo nella mia variabile la lista di dischi che sono degli oggetti
                    this.discsList = resp.data.response;
                })
        }
    },

    mounted() {
        this.obtainData();
    }
})