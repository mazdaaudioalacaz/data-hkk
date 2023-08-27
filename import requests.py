import os

def main():
    # Dosyaların bulunduğu klasörü belirtin
    klasor_yolu = "C:/Users/cem/Documents/GitHub/data-hkk"
    
    # Dosya isimlerini alın
    dosya_isimleri = [dosya for dosya in os.listdir(klasor_yolu) if dosya.endswith(".html")]
    
    # Dosya isimlerini metin dosyasına yazın
    with open("html_dosya_isimleri.txt", "w", encoding="utf8") as dosya:
        for dosya_isimi in dosya_isimleri:
            dosya.write(dosya_isimi + "\n")

if __name__ == "__main__":
    main()






