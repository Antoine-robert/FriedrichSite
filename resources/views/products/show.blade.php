<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body style="background: url('http://127.0.0.1:8000/img/bois.jpg');background-size: cover ">

    <div class="card" style="margin-left:12%;margin-top:7%;box-shadow: 7px 0 10px #555;padding: 0;width: 75%;height: 703px">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div> <a href="#"><img src="{{$produits->link_img}}" style="max-height: 700px"></a></div>
                    </div>
                </article>
            </aside>
            <aside class="col-sm-6" style="margin-left:5%;">
                <article class="card-body p-5">
                    <h3 class="title mb-3">{{$produits->title}}</h3>
                    <hr>
                    <p class="price-detail-wrap">
	 <!-- price-detail-wrap .// -->
                    <dl class="item-property" style="font-size: 20px;">
                        <dt>Description</dt>
                        <dd><p>{{$produits->description}}</p></dd>
                    </dl>
                    <hr>
                    <dl class="param param-feature"style="font-size: 20px;">
                        <dt>Ingredient</dt>
                        <dd>liste des ingrédients</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <hr>
                    <dl class="param param-feature"style="font-size: 20px;">
                        <dt>Conseil de preparation</dt>
                        <dd>{{$produits->Conseil_de_prep}}</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <br>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                            <dl class="param param-inline" style="font-size: 20px;">
                                <dt>Quantitée disponible: </dt>
                                <dd>par boite de 2 </dd>
                                 <dd>par boite de 4</dd>
                            </dl>  <!-- item-property .// -->
                        </div> <!-- col.// -->
                    </div>
                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->


<!--container.//-->
</body>
</html>