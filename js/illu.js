var timelineParameters = anime.timeline({
   autoplay: false,
});

timelineParameters
  .add({
    targets: '#template_grey .__device',
      translateX: 135,
      direction: 'alternate',
      opacity: {
        value: 1,
        duration: 2000
    },
      delay: function(el, i) { return i * 100 },
      duration: 1200,
      offset: 900
  })
  .add({
    targets: '#sun path',
    translateY: -300,
    duration: 3000,
    offset: 500
  })
  // .add({
  //   targets: '#cloud .__cloud_2',
  //   translateX: 50,
  //   duration: 3000,
  //   offset: 500
  // })
  // .add({
  //   targets: '#cloud .__cloud_3',
  //    translateX: 10,
  //   // translateY: 10,
  //   duration: 3000,
  //   offset: 500
  // })
  .add({
    targets: '#sand_left .__sand_left ',
    translateX: [ { value: -138 }],
    duration: 1000,
    offset: 900
  })
  .add({
    targets: '#moutain_left .__moutain_left',
    translateX: -190,
    easing: 'easeOutExpo',
    delay: function(el, i) { return i * 100 },
    duration: 500,
    offset: 600
  })
  .add({
    targets: '#moutain_right .__moutain_right',
    translateX: 250,
    easing: 'easeOutExpo',
    delay: function(el, i) { return i * 100 },
    duration: 500,
    offset: 600
  })
  .add({
    targets: '#forme_left path',
    translateX: -70,
    translateY: -110,
    easing: 'easeOutExpo',
    delay: function(el, i) { return i * 100 },
    duration: 1800,
    offset: 900
  })
  .add({
    targets: '#forme_right path',
    translateX: 248,
    translateY: -45,
    easing: 'easeOutExpo',
    delay: function(el, i) { return i * 100 },
    duration: 2800,
    offset: 900
  });

  document.querySelector('.btn_design').onclick = timelineParameters.restart;
