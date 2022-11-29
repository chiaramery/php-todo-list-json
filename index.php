<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>ToDoList</title>
</head>

<body>
    <main id="app">

        <div class="container">
            <h1 class="text-center">ToDoList</h1>
            <div class="row justify-content-center">
                <ul class="list-group">
                    <li class="list-group-item" v-for="todo in toDoList">{{todo}}</li>
                </ul>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 mt-5">
                    <input class="form-control" type="text" placeholder="Inserisci nuovo toDo" v-model="newToDo">
                    <button class="btn btn-primary mt-1" @click="addTodo">Salva</button>
                </div>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>

</html>