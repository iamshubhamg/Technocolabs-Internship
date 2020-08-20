import React from 'react';
import './Business.css';




class Business extends React.Component {
  render () {
    return (
    <div className="Business">
      <div className="image-container">
        <img src={this.props.business.imageSrc} alt={this.props.business.category}/>
      </div>
      <h2>{this.props.business.name}</h2>
      <div className="Business-information">
         <div className="Business-address">
           <p>{this.props.business.address}</p>
           <p>{this.props.business.city}</p>
           <p>{this.props.business.zipCode}</p>
          </div>
          <div className="Business-reviews">
            <h3>{this.props.business.category}</h3>
            <h3 className="rating">Rating {this.props.business.rating}</h3>
            <p>Review Count {this.props.business.reviewCount}</p>
          </div>
      </div>
   </div>
)
}
   
};

export default Business;