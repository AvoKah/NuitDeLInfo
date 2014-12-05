package com.example.clickandheal;

public class Cur_Numbers {

	public Cur_Numbers()
	{
		this.cur_cash = 0;
		this.cur_vacc = 0;
	}
	
	public int get_cash()
	{
		return cur_cash;
	}
	
	public void set_cash(int i)
	{
		cur_cash = i;
	}
	
	public int get_vacc()
	{
		return cur_vacc;
	}
	
	public void set_vacc(int i)
	{
		cur_vacc = i;
	}
	
	private int cur_cash;
	private int cur_vacc;
}
