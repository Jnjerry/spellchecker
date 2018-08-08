@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Text Autocorrect Exercise</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form class="form col-md-12">
                            <div class="form-group">
                                <label class="col-sm-4 col-form-label">Enter your text below</label>
                                <textarea class="form-control" required name="myTextArea"  id="myTextArea" cols="30" rows="4">check if this text is propearly writtten and if it iss of legitimatte gramar</textarea>
                            </div>
                            <button class="btn btn-info btn-sm" type="button" onclick="validateField()">Spell Check</button>
                        </form>


                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' >
    function validateField(){
        var text_chars = $("#myTextArea").val();
        if (text_chars=="") {
            alert("Text area field is empty. Please add the text for validation!")
        }else{
            // alert(text_chars);
            $Spelling.SpellCheckInWindow('myTextArea');
        }

    }
</script>
@endsection
