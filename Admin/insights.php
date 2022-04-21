<style>
    #counter {    
    background-color: #f7f3f2;
    color: #fff;
    display: block;
    overflow: hidden;
    text-align: center;
    padding: 0px;
}
#counter .count {
    padding: 50px;
    background: white;
    color: black;
    text-align: center;
}
.count h4 {
    color: black;
	font-size: 16px;
	margin-top: 0;
}
#counter .count .fa {
    font-size: 40px;
    display: block;
    color: black;
}
#counter .number {
    font-size: 30px;
    font-weight: 700;
    margin: 0;
}
/*  Pricing Section  */

#pricing {
    background: #f7f7f7;
}
.pricing-items {
    padding-top: 50px;
}
.pricing-item {
    background: #fff;
    position: relative;
    box-shadow: 0 0 9px 0 rgba(130, 121, 121, .2);
    padding: 50px 0px;
    border-top-right-radius: 2em;
    border-bottom-left-radius: 2em;
}
.pricing-item.active {
    top: -50px;
}
.price-list li {
    list-style: none;
    margin-bottom: 15px;
}

.price-list .price {
    font-size: 30px;
    font-weight: bold;
}
.pricing-item .ribbon {
    margin: -50px 0 20px;
    display: block;
    background-color: #ffb400;
    padding: 15px 0 2px;
    opacity: 0.8;
    border-top-right-radius: 2em;
}
.pricing-item:hover .ribbon {
    background-color: #ffb400;
	opacity: 1;
}
.pricing-item.active .ribbon {
    background-color: #ffb400;
	opacity: 1;
}
.pricing-item .ribbon p {
    color: #fff;
    font-size: 22px;
    margin: 0 0 10px;
    font-weight: 600;
}
.pricing-item.active .price-list li, .pricing-item:hover .price-list li {
    color: #848181;;
}
ul.price-list {
    margin-bottom: 30px;
    padding: 0;
}
.btn-price {
    display: inline-block;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    padding: 14px 40px;
    -webkit-border-radius: 26px;
    -moz-border-radius: 26px;
    -o-border-radius: 26px;
    border-radius: 26px;
    border: 1px solid #848181;
    background-color: transparent;
    color: #848181;
}
.pricing-item:hover .btn-price,
.active .btn-price {
    border: 1px solid #ffb400;
    background-color: #ffb400;
    color: #fff;
}
.btn-price:focus {
    background-color: transparent;
    text-decoration: none;
}
@media only screen and (max-width: 767px) {
    .pricing-items {
        padding-top: 0;
    }
    .pricing-item.active {
        top: 20px;
        margin-bottom: 40px;
    }
}
</style>