const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoList: [],
            newToDo: " ",
        };
    },
    created() {
        axios.get("server.php").then((resp) => {
            this.toDoList = resp.data;
        })
    },
    methods: {
        addTodo() {
            const data = {
                newToDo: this.newToDo,
            };

            axios
                .post("server.php", data, {
                    headers: { "Content_Type": "multipart/form-data" },
                })
                .then((resp) => {
                    // this.toDoList = resp.data;
                    // this.newToDo = "";
                    console.log(resp.data);
                });
        },
    },

}).mount("#app");