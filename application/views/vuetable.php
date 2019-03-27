 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">
      <script src="<?=base_url()?>vue/vee-validate.js"></script>
<style>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>

   <div id="app">
     <!-- template for the modal component -->
    <script type="text/x-template" id="modal-template">
    <transition name="modal">
      <div class="modal-mask">
        <div class="modal-wrapper">
          <div class="modal-container">

            <div class="modal-header">
              <slot name="header">
                default header
              </slot>
            </div>

            <div class="modal-body">
              <slot name="body">
                default body
              </slot>
            </div>

            <div class="modal-footer">
              <slot name="footer">
                default footer
                <button class="modal-default-button" @click="$emit('close')">
                  OK
                </button>
              </slot>
            </div>
          </div>
        </div>
      </div>
    </transition>
    </script>
    <modal v-if="showModal" @close="showModal = false">

      <h3 slot="header">Edit Data</h3>
      <form id="itemsForm" slot="body" class="form-horizontal" v-on:submit.prevent="validateBeforeSubmit">

        <div v-bind:class="{'form-group':true, 'col-md-8':true, 'col-md-offset-2' : true, 'has-error':errors.has('nama')}">
          <label for="code" class="control-label">Nama</label>
          <input type="text" v-validate="'required|alpha'" id="nama" v-model="dataEdit.nama" name="nama" class="form-control">
          <span v-show="errors.has('nama')" class="text-danger">{{ errors.first('nama') }}</span>
       </div>
       <div v-bind:class="{'form-group':true, 'col-md-8':true, 'col-md-offset-2' : true, 'has-error':errors.has('asal')}">
         <label for="name" class="control-label">Asal</label>
         <input type="text" v-validate="'required'" id="asal" v-model="dataEdit.asal" name="asal" class="form-control">
         <span v-show="errors.has('asal')" class="text-danger">{{ errors.first('asal') }}</span>
       </div>
       <div slot="footer" class="form-group col-md-8 col-md-offset-2">
         <button v-if="!onEdit" class="btn btn-primary">Add New</button>
         <button v-if="onEdit" class="btn btn-primary">Update</button>
         <button type="reset" class="btn btn-default">Reset</button>
         <button v-if="onEdit" v-on:click="createNew" class="btn btn-info">Create New</button>
       </div>
     </form>

    </modal>

     Daftar Mahasiswa
     <table class="table table-stripped">
         <?php foreach ($data->result_array() as $d){

         }?>
       <tr v-for="mhs of mahasiswa">
         <td><strong>{{mhs.nama}}</strong></td>
         <td>{{mhs.asal}}</td>
         <td><img v-bind:src="mhs.foto" height="62" width="82"></td>
         <td>
           <td>
                <button class="btn btn-primary" v-on:click="edit(mhs.id)">Edit</button>
          </td>
         </td>
       </tr>
     </table>

   </div>
   <script type="text/javascript">
   var base_url = '<?=base_url()?>';
   Vue.component('modal', {
      template: '#modal-template'
    })
   Vue.use(VeeValidate);
   var app = new Vue({
                el: '#app',
                created() {
                    this.fetchData()
                },
                data: {
                   showModal: false,
                    mahasiswa: [],
                    dataEdit: {
                       nama: '',
                       asal: ''
                     },
                    onEdit: false,
                    selectedAll: false,
                    delete: [],
                    loading: true,
                    message: []
                },
                methods: {
                  validateBeforeSubmit: function() {
                        var vm = this
                        this.$validator.validateAll().then(function(isValid) {
                            if(!isValid) return;
                            vm.startLoading()
                            var url = base_url+'index.php/MahasiswaRest/input_post/'
                            var message = 'Items added successfully'
                            if(vm.onEdit) {
                                url = base_url+'inde.php/MahasiswaRest/input_post/'+vm.onEdit
                                message = 'Items Updated successfully'
                            }
                            axios.post(url,
                            new FormData($('#itemsForm')[0])).then(function(response) {
                                vm.getRows()
                                vm.createNew()
                                vm.showMessage(message)
                                vm.endLoading()
                            }).catch(function(e) {

                            })
                        });
                    },
                    createNew: function() {
                         this.onEdit = false
                         this.dataEdit = {
                             code:'',
                             name:''
                         }
                     },
                    startLoading: function() {
                        this.loading = true
                    },
                    endLoading: function() {
                         this.loading = false
                     },
                    showMessage: function(message, status = 'success') {
                        this.message = {text:message, status:status}
                        this.removeMessage()
                    },
                    removeMessage: function() {
                        var msg = this
                        setTimeout(function() {
                            msg.message = {text:'', status:''}
                        }, 5000)
                    },
                    fetchData: function() {
                      axios.get('http://localhost/CI3/index.php/MahasiswaRest/index_get').then(response => {
                          for (i = 0; i < response.data.length; i++) {
                              response.data[i]["foto"] = base_url+response.data[i]["foto"];
                          }
                          this.mahasiswa = response.data,
                          this.endLoading()
                      });
                    },
                    edit: function(id) {
                             this.showModal = true
                             this.onEdit    = id
                             this.startLoading()
                             this.dataEdit  = {
                                 nama     : '',
                                 asal     : ''
                             }
                             axios.get(base_url+'index.php/MahasiswaRest/index_get/'+id).then(
                                 result => {
                                     console.log(result.data),
                                     this.dataEdit.nama = result.data[0].nama,
                                     this.dataEdit.asal = result.data[0].asal,
                                     this.endLoading()
                                 },

                             );
                         },
                }
            });
   </script>
 </body>

 </html>
