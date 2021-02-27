<!-- UI -->
<template>
    <div>
        <h1>Books</h1>
        <table class="table table-hover"> 
            <thead>
                <th>Date Published</th>
                <th>Author Name</th>
                <th>Book Title</th>
                <th>Action</th>
            </thead>    
            <tbody>
                <tr>
                    <td>01/01/2021</td>
                    <td>Author1</td>
                    <td>Title1</td>
                    <td>        
                        <button type="button" class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-secondary"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>    
            <tfoot>
                <tr>
                    <td>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Input Date Published" v-model="form.date_published">
                        </div>                        
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Input Author Name" v-model="form.book_author">
                        </div>                        
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Input Title" v-model="form.book_title">
                        </div>                        
                    </td>
                    <td>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" @click="submit"><i class="a fa-plus"></i></button>                                
                        </div>
                    </td>
                </tr>
            </tfoot>                
        </table>
    </div>
</template>

<!-- Logic -->
<script>
export default {
    data() {
        return {
            form: {
                date_published: null,
                book_author: null,
                book_title: null
            }
        }
    },
    methods: {
        submit() {
            axios.post('/booklist', this.form)
            .then(function (response) {
                alert('success')
            })
            .catch(function (error) {
                //alert('Something went wrong')
                console.log(error);
            });
        }
    }

}
</script>