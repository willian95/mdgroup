@extends("layouts.main")

@section("content")
    
    <div id="dev-category">

        <div class="elipse" v-if="loading == true">
            <img class="logo-f" src="{{ asset('assets/img/logoLoader.png') }}" alt="">
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content" v-cloak>
            <div class="d-flex flex-column-fluid">

                <div class="container">
                
                    <div class="card card-custom gutter-b">
                        <div class="card-header flex-wrap py-3">
                            <div class="card-title">
                                <h3 class="card-label">Banner
                            </div>
                            <div class="card-toolbar">

                                <!--end::Dropdown-->
                                <!--begin::Button-->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bannerModal" @click="create()">
                                    Nuevo Banner
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Datatable-->
                            <table class="table table-bordered table-checkable" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Imagen</th>
                                        <th width="200">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(banner, index) in banners">
                                        <th>@{{ index + 1 }}</th>
                                        <td>
                                            <img :src="'{{ url('/images/banners') }}'+'/'+banner.image" alt="" style="width: 20%">
                                        </td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#bannerModal" @click="edit(banner)"><i class="far fa-edit"></i></button>
                                            <button class="btn btn-primary" @click="erase(banner.id)"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite">Mostrando página @{{ currentPage }} de @{{ totalPages }}</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_full_numbers" id="kt_datatable_paginate">
                                        <ul class="pagination">
                                            
                                            <li class="paginate_button page-item active" v-for="(link, index) in links">
                                                <a style="cursor: pointer" aria-controls="kt_datatable" tabindex="0" :class="link.active == false ? linkClass : activeLinkClass":key="index" @click="fetch(link)" v-html="link.label"></a>
                                            </li>
                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end: Datatable-->
                        </div>
                    </div>

                </div>

            </div>

            <!-- Modal-->
            <div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">@{{ modalTitle }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="picture">Imagen</label>
                                <input type="file" id="image" class="form-control" id="picture" ref="file" @change="onImageChange" accept="image/*">
                            </div>
                            <div class="form-group">
                                <img id="blah" :src="imagePreview" class="full-image" style="margin-top: 10px; width: 40%">
                            </div>

                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary font-weight-bold"  @click="store()" v-if="action == 'create'">Crear</button>
                            <button type="button" class="btn btn-primary font-weight-bold"  @click="update()" v-if="action == 'edit'">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection

@push("styles")

    <style>
        .active-link{
            background-color:red !important;
        }
    </style>

@endpush

@push("scripts")

    <script>
        
        const app = new Vue({
            el: '#dev-category',
            data(){
                return{
                    modalTitle:"Nuevo banner",
                    bannerId:"",
                    picture:"",
                    imagePreview:"",
                    action:"create",
                    banners:[],
                    pages:0,
                    page:1,
                    showMenu:false,
                    loading:false,
                    links:[],
                    currentPage:"",
                    totalPages:"",
                    linkClass:"page-link",
                    activeLinkClass:"page-link active-link",
                }
            },
            methods:{
                
                create(){
                    this.action = "create"
                    this.bannerId = ""
                },
                store(){

                    this.loading = true
                    axios.post("{{ url('banner/store') }}", {image: this.picture})
                    .then(res => {
                        this.loading = false
                        if(res.data.success == true){

                            swal({
                                title: "Perfecto!",
                                text: "Haz creado un banner!",
                                icon: "success"
                            });
                    
                            this.imagePreview = ""
                            $("#image").val(null)
                            this.fetch()
                        }else{

                            swal({
                                title: "Opps!",
                                text: res.data.msg,
                                icon: "error"
                            });

                        }

                    })
                    .catch(err => {
                        this.loading = false
                        $.each(err.response.data.errors, function(key, value){
                            alert(value)
                        });
                    })

                },
                update(){
                    this.loading = true
                    axios.post("{{ url('banner/update') }}", {id: this.bannerId, image: this.picture})
                    .then(res => {
                        this.loading = false
                        if(res.data.success == true){

                            swal({
                                title: "Excelente!",
                                text: "Has actualizado un banner!",
                                icon: "success"
                            });
                            this.bannerId = ""
                            this.imagePreview = ""
                            $("#image").val(null)
                            this.fetch()
                            
                        }else{

                            swal({
                                title: "Opps!",
                                text: res.data.msg,
                                icon: "error"
                            });

                        }

                    })
                    .catch(err => {
                        this.loading = false
                        $.each(err.response.data.errors, function(key, value){
                            alert(value)
                        });
                    })

                },
                edit(banner){
                    this.modalTitle = "Editar banner"
                    this.action = "edit"
                    this.bannerId = banner.id
                    this.imagePreview = "{{ url('/') }}"+"/images/banners/"+banner.image
                },
                onImageChange(e){
                    this.picture = e.target.files[0];

                    this.imagePreview = URL.createObjectURL(this.picture);
                    let files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                        return;
                    this.view_image = false
                    this.createImage(files[0]);
                },
                createImage(file) {
                    let reader = new FileReader();
                    let vm = this;
                    reader.onload = (e) => {
                        vm.picture = e.target.result;
                    };
                    reader.readAsDataURL(file);
                },
                fetch(page = 1){

                    this.page = page

                    axios.get("{{ url('banner/fetch/') }}"+"?page="+page)
                    .then(res => {

                        this.banners = res.data.banners.data
                        this.links = res.data.banners.links
                        this.currentPage = res.data.banners.current_page
                        this.totalPages = res.data.banners.last_page

                    })
                    .catch(err => {
                        $.each(err.response.data.errors, function(key, value){
                            alert(value)
                        });
                    })

                },
                erase(id){

                    swal({
                        title: "¿Estás seguro?",
                        text: "Eliminarás este banner!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            this.loading = true
                            axios.post("{{ url('banner/delete/') }}", {id: id}).then(res => {
                                this.loading = false
                                if(res.data.success == true){
                                    swal({
                                        title: "Genial!",
                                        text: "Banner eliminado!",
                                        icon: "success"
                                    });
                                    this.fetch()
                                }else{

                                    swal({
                                        title: "Oops!",
                                        text: res.data.msg,
                                        icon: "success"
                                    });

                                }

                            }).catch(err => {
                                this.loading = false
                                $.each(err.response.data.errors, function(key, value){
                                    alert(value)
                                });
                            })

                        }
                    });


                },
                toggleMenu(){

                    if(this.showMenu == false){
                        $("#menu").addClass("show")
                        this.showMenu = true
                    }else{
                        $("#menu").removeClass("show")
                        this.showMenu = false
                    }

                }


            },
            mounted(){
                
                this.fetch()

            }

        })
    
    </script>

@endpush