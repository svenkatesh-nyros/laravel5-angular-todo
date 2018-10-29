class TodoAppController{
    constructor(API){
        'ngInject';

        //
        this.API = API;
        this.name = '';
    }

    $onInit(){

        this.getTodos();
        
    }

    addTodo () {
        alert()
    }

    getTodos () {
        this.API.all('/get_todos').get('get_todos').then( (res) => {
            console.log('response', res);
        })
    }

}

export const TodoAppComponent = {
    templateUrl: './views/app/components/todo-app/todo-app.component.html',
    controller: TodoAppController,
    controllerAs: 'vm',
    bindings: {}
}
