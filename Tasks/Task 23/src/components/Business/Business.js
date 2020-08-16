import React from 'react';
import './Business.css';


var business = {
    imageSrc: 'https://s3.amazonaws.com/codecademy-content/programs/react/ravenous/pizza.jpg',
    name: 'MarginOtto Pizzeria',
    address: '1010 Paddington Way',
    city: 'Flavortown',
    state: 'NY',
    zipCode: '10101',
    category: 'Italian',
    rating: 4.5,
    reviewCount: 90
};

class Business extends React.Component {
  render () {
    return (
    <div className="Business">
      <div className="image-container">
        <img src={business.imageSrc} alt={business.category}/>
      </div>
      <h2>{business.name}</h2>
      <div className="Business-information">
         <div className="Business-address">
           <p>{business.address}</p>
           <p>{business.city}</p>
           <p>{business.zipCode}</p>
          </div>
          <div className="Business-reviews">
            <h3>{business.category}</h3>
            <h3 className="rating">Rating {business.rating}</h3>
            <p>Review Count {business.reviewCount}</p>
          </div>
      </div>
   </div>
)
}
   
};

export default Business;