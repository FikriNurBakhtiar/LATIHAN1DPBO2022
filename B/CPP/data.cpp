#include <bits/stdc++.h>

using namespace std;

class DaftarClub
{
    private:
        //Data yang akan diisi
        string namaClub;
        string negaraAsal;
        string namaPemain;
        string asalPemain;
        int tahunBerdiri;
        int nopung;
    public:
    DaftarClub(string namaClub, string negaraAsal, int tahunBerdiri, string namaPemain, string asalPemain, int nopung)
    {
        this->namaClub = namaClub;
        this->negaraAsal = negaraAsal;
        this->tahunBerdiri = tahunBerdiri;
        this->namaPemain = namaPemain;
        this->asalPemain = asalPemain;
        this->nopung = nopung;
    }
    DaftarClub()
    {
        this->namaClub = " ";
        this->negaraAsal = " ";
        this->tahunBerdiri = 0;
        this->namaPemain = " ";
        this->asalPemain = " ";
        this->nopung = 0;
    }

    void setnamaClub(string namaClube)
    {
        this->namaClub = namaClub;
    }

    string getnamaClub()
    {
        return this->namaClub;
    }

    void setnegaraAsal(string negaraAsal)
    {
        this->negaraAsal = negaraAsal;
    }

    string getnegaraAsal()
    {
        return this->negaraAsal;
    }

    void setnamaPemain(string namaPemain)
    {
        this->namaPemain = namaPemain;
    }

    string getnamaPemain()
    {
        return this->namaPemain;
    }

    void setasalPemain(string asalPemain)
    {
        this->asalPemain = asalPemain;
    }

    string getasalPemain()
    {
        return this->asalPemain;
    }

    void settahunBerdiri(int tahunBerdiri)
    {
        this->tahunBerdiri = tahunBerdiri;
    }

    int gettahunBerdiri()
    {
        return this->tahunBerdiri;
    }

    void setnopung(int nopung)
    {
        this->nopung = nopung;
    }

    int getnopung()
    {
        return this->nopung;
    }
        ~DaftarClub(){}
};