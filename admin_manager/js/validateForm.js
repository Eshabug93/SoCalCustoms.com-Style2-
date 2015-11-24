function validateForm ( ) { 
    var isValid = true;
        if ( document.Products.product_name.value == "" ) { 
            alert ( "Please type your Name" ); 
            isValid = false;
        } else if ( document.Products.product_name.value.length < 2 ) { 
                alert ( "Your name must be at least 8 characters long" ); 
                isValid = false;
        } else if ( document.Products.price.value == "" ) { 
                alert ( "Please give your product its price." ); 
                isValid = false;
        } else if ( document.Products.category.value == "" ) { 
                alert ( "Please select a category." ); 
                isValid = false;
        } else if ( document.Products.subcategory.value == "" ) { 
                alert ( "Please select a subcategory." ); 
                isValid = false;
        } else if ( document.Products.fieldFile.value == "" ) { 
                alert ( "Please select a product image from the directory." ); 
                isValid = false;
        }
        return isValid;
    }
