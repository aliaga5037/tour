@extends('layouts.dizayn')
@section('basliq');
<h2>Bizimlə İşlə</h2>
@endsection
@section('content')
<style media="screen">

label{

  font-size: 12px;
}
  input{

    display:block;
    border:1px solid black;
    font-size: 14px;
    color:black;
    width: 50%;

  }

  input:focus{

      padding:15px;
      background-color:;

  }

  textarea{

    border: 1px solid black;
    display:block;
    background: white;
    width: 50%;

  }




</style>
<div style="margin-left:35%;" class="">

  <form class="" action="" method="post">
        <label style="color:black;"for="ad">Rəhbər Adı</label>
        <input type="text" id="ad"  name="name" value="">
        <label style="color:black;"for="soyad">Rəhbər Soyadı</label>
        <input type="text" id="soyad"  name="name" value="">
        <label style="color:black;"for="sirket">Şirkət Adı</label>
        <input type="text" id="sirket"  name="name" value="">


        <label style="color:black;"for="sirketil">Şirkətin yarandığı il</label>
        <input type="date" id="sirketil"  name="name" value="">

        <label style="color:black;"for="sirketab">Şirkətin haqqında</label>
        <textarea name="name" id="sirketab" ></textarea>

        <label style="color:black;"for="email">Email</label>
        <input type="email" id="email"  name="name" value="">
        <label style="color:black;"for="sifre">Şifrə</label>
        <input type="email" id="sifre"  name="name" value="">
        <input style="margin-top:50px; " type="submit" name="name" value="Qeydiyyatdan Keç">

  </form>

</div>


@endsection
