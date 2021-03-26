import React from 'react'

export const Slider = () => {
    return (
      <>
        <div id="myCarousel" className="carousel slide" data-ride="carousel">
            <ol className="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" className="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div className="carousel-inner">
              <div className="carousel-item active">
              <img src="https://loremflickr.com/1080/400/technology" />
                <div className="container">
                  <div className="carousel-caption text-left">
                    <h1>Ejemplo headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a className="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div className="carousel-item">
              <img src="https://loremflickr.com/1080/400/java" />
                <div className="container">
                  <div className="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a className="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div className="carousel-item">
              <img src="https://loremflickr.com/1080/400/php" />

                <div className="container">
                  <div className="carousel-caption text-right">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a className="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
            <a className="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span className="carousel-control-prev-icon" aria-hidden="true"></span>
              <span className="sr-only">Previous</span>
            </a>
            <a className="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span className="carousel-control-next-icon" aria-hidden="true"></span>
              <span className="sr-only">Next</span>
            </a>
          </div>
      </>
    )
}
