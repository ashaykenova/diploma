import AppForm from '../app-components/Form/AppForm';

Vue.component('place-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                announce:  '' ,
                description:  '' ,
                
            },
            mediaCollections: ['gallery']
        }
    }

});