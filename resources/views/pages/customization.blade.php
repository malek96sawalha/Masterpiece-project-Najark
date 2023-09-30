@extends('layout.master2')
@section('title','customization')
@section('content')


<!-- start content -->
<!-- start title -->
<div class="page-title">
    <h2>Build Your Own Design</h2>
    </div>
    <!-- end title -->
    <!-- start body -->

    <div class="label">
        <h4>Choose Your Specification :</h4>

    </div>
    <div class="container">
    <div class="row-content">
        <form action="">
            <div class="container-input">

                <div class="field">
                <label for="">Set Contains</label><br><br>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Bed </option>
                    <option value="2">Nightstand</option>
                    <option value="3">Dresser</option>
                    <option value="3">Dresser mirror</option>
                    <option value="3">Chest of drawers</option>
                    <option value="3">Armoire or wardrobe</option>
                  </select>
            </div>
        <div class="field">
            <label for="">Type Of Bed</label><br><br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Double Bed</option>
                <option value="2">single Bed</option>

              </select>
        </div>

            <div class="field">
                <label for="">Storage</label><br><br>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Chest of drawers</option>
                    <option value="2">wardrobe</option>
                    <option value="3">Dresser</option>
                  </select>
            </div>

        </div>
        <div class="container-input">
            <div  class="field">
                <label for="">Material Type</label><br><br>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Plywood</option>
                    <option value="2">MDF</option>
                    <option value="3">Particleboard</option>
                    <option value="3">Glass</option>
                    <option value="3">Acrylic</option>
                    <option value="3">Mirrored Shutters</option>
                    <option value="3">Solid Wood</option>
                    <option value="3">Laminate</option>
                  </select>
            </div>

            <div  class="field">
                <label for="">Color</label><br><br>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Black</option>
                    <option value="2">White</option>
                    <option value="3">Navy</option>
                    <option value="3">Teal</option>
                    <option value="3">Blue</option>
                    <option value="3">Pink</option>
                    <option value="3">Beige</option>
                    <option value="3">Purple</option>
                    <option value="3">Yellow</option>
                    <option value="3">Cream</option>
                  </select>
            </div>
            <div  class="field">
                <label for="">Choose Your Design</label><br><br>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Modern</option>
                    <option value="2">Rustic</option>
                  </select>

            </div>
        </div>
        <div class="container-input">
            <div class="field">
                <label for="">Size of bed</label><br><br>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">200cm * 110cm</option>
                    <option value="2">190cm * 90cm</option>
                    <option value="3">160cm * 90cm</option>
                  </select>
            </div>

            <div  class="field">
                <label for="">Wood Type</label><br><br>
                <select class="form-select " aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Oak</option>
                    <option value="2">Maple</option>
                    <option value="3">Ash</option>
                    <option value="3">Sassafras</option>
                    <option value="3">Cherry</option>
                    <option value="3">Hickory</option>
                  </select>
            </div>
            <div  class="field">
                <label for="">Amount of Set Contains</label><br><br>
                <div  class="field">
               <label for=""> Beds  :&nbsp;&nbsp;&nbsp;&nbsp;</label>
               <input type="number"></div>
            <div  class="field">
                <label for=""> Dresser :</label>
                <input type="number">
            </div>

            </div>
        </div>
        <!-- <div class="btn">
                <input type="submit" value="submit" class="btn btn-outline-secondary">

        </div> -->
        </form>

    </div>

    </div>

    <!-- end body -->











    <!-- end content -->







    <!-- Start content -->




 <div class="label">
    <h3>Product Specification</h3>
</div>
<div class="container">

<div class="content">
    <table>
        <thead>
            <tr>
                <th>Type Of Bed :</th>
            </tr>
            <tr>
                <th>Storage Provided :</th>
            </tr>
            <tr>
                <th>Set Contains : </th>
            </tr>
            <tr>
                <th>Material Type :</th>
            </tr>
            <tr>
                <th>Color :</th>
            </tr>
            <tr>
                <th>Size :</th>
            </tr>
            <tr>
                <th>Wood Type :</th>
            </tr>
            <tr>
                <th>Design :</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Signle Bed</td>
            </tr>
            <tr>
                <td>Without Box</td>
            </tr>
            <tr>
                <td>2 Beds, 4 Side Tables </td>
            </tr>
            <tr>
                <td>Wood</td>
            </tr>
            <tr>
                <td>Brown</td>
            </tr>
            <tr>
                <td>200cm * 110cm</td>
            </tr>
            <tr>
                <td>pine</td>
            </tr>
            <tr>
                <td>Rustic</td>
            </tr>
        </tbody>
    </table>


</div>
<div class="btns">
    <a href="" class="btn-tabel ">Change</a>
    <a href="popup.html" class="btn-tabel ">Place Order</a>

</div>

</div>




<!-- End Content -->


@endsection
