@extends('layouts.admin')

@section('content')
    <div class="content"><!-- For Components documentaion -->
        <div class="row">
            <div class="col-xl-12">
                <!-- Basic Examples -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Input Content Bahan bacaan</h2>
                    </div>
                    <div class="card-body">
                        <div class="collapse" id="collapse-basic-input">
                            <pre class="language-html mb-4"></pre>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="" id="">
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput2"
                                    placeholder="Judul Content">
                            </div>
                            <div class="form-group">
                                <div id="standalone">
                                    <div id="toolbar">
                                        <span class="ql-formats">
                                            <select class="ql-font"></select>
                                            <select class="ql-size"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <select class="ql-color"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-blockquote"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-list" value="ordered"></button>
                                            <button class="ql-list" value="bullet"></button>
                                            <button class="ql-indent" value="-1"></button>
                                            <button class="ql-indent" value="+1"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-direction" value="rtl"></button>
                                            <select class="ql-align"></select>
                                        </span>
                                    </div>
                                </div>
                                <div id="editor"></div>
                            </div>
                            <div class="form-footer mt-6">
                                <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                                <a href="topik.html"><button type="button"
                                        class="btn btn-light btn-pill">Cancel</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
