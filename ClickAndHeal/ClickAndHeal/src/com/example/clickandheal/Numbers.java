package com.example.clickandheal;

public class Numbers {
	
	public Numbers(int cash, int vacc)
	{
		this.cash_nb = cash;
		this.vacc_nb = vacc;
	}
	private int cash_nb;
	private int vacc_nb;
	
	public int get_cash()
	{
		return this.cash_nb;
	}
	public int get_vacc()
	{
		return this.vacc_nb;
	}
}
