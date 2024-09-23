AOS.init({
  duration: 1200, // Animasyon süresi (milisaniye)
  offset: 50, // Animasyonun başlaması için elemanın üst kısmının sayfanın ne kadar altına gelmesi gerektiği
  delay: 100, // Animasyonun başlaması için gecikme süresi
  mirror: true,
  easing: "ease-in-out", // Animasyonun hız eğrisi
  once: false, // Animasyon sadece bir kez mi oynasın (true) yoksa her scroll işleminde oynasın mı (false)
});
