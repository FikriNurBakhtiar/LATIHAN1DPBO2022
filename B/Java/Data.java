class DataClub
{
    
    private String namaClub;
    private String negaraAsal;
    private String asalPemain;
    private String namaPemain;
    private int tahunBerdiri;
    private int nopung;
    
    
    
    DataClub()
    {

    }

    // Constructor Input
    public DataClub(String namaClub, String negaraAsal, int tahunBerdiri, String namaPemain, String asalPemain, int nopung)
    {
        this.namaClub = namaClub;
        this.negaraAsal = negaraAsal;
        this.tahunBerdiri = tahunBerdiri;
        this.namaPemain = namaPemain;
        this.asalPemain = asalPemain;
        this.nopung = nopung;
    }

    
    public String getnamaClub() {
        return namaClub;
    }

    public void setnamaClub(String namaClub) {
        this.namaClub = namaClub;
    }

    
    public String getnegaraAsal() {
        return negaraAsal;
    }

    public void setnegaraAsal(String negaraAsal) {
        this.negaraAsal = negaraAsal;
    }

    
    public int gettahunBerdiri() {
        return tahunBerdiri;
    }

    public void settahunBerdiri(int tahunBerdiri) {
        this.tahunBerdiri = tahunBerdiri;
    }

    
    public String getnamaPemain() {
        return namaPemain;
    }

    public void setnamaPemain(String namaPemain) {
        this.namaPemain = namaPemain;
    }

    public String getasalPemain() {
        return asalPemain;
    }

    public void setasalPemain(String asalPemain) {
        this.asalPemain = asalPemain;
    }

    public int getnopung() {
        return nopung;
    }

    public void setnopung(int nopung) {
        this.nopung = nopung;
    }

    public void Tampil()
    {
        System.out.println("Nama Tim                : " + this.getnamaClub()); 
        System.out.println("Asal Tim                : " + this.getnegaraAsal()); 
        System.out.println("Tahun Berdiri           : " + this.gettahunBerdiri()); 
        System.out.println("Nama Kapten             : " + this.getnamaPemain()); 
        System.out.println("Asal Negara             : " + this.getasalPemain()); 
        System.out.println("Nomor Punggung          : " + this.getnopung()); 
    }
    
}